document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.habitat-link').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const habitatId = link.getAttribute('data-habitat-id');
            //console.log('Fetching habitat details for habitat:', habitatId);


            fetch(`/habitat/${habitatId}/animals`)
                .then(response => {
                    //console.log('Response:', response);
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    //console.log('Data:', data);
                    const animalsList = document.getElementById('animals-list');
                    animalsList.innerHTML = '';


                    const habitatDescriptionDiv = document.createElement('div');
                    habitatDescriptionDiv.className = 'col-lg-12';
                    habitatDescriptionDiv.innerHTML = `
                        <div class="card m-4 cadre">
                            <div class="card-body">
                                <h3 class="card-title">Description de l'habitat (${data.habitat_name})</h3>
                                <p>${data.habitat_detail}</p>
                            </div>
                        </div>
                    `;
                    animalsList.appendChild(habitatDescriptionDiv);


                    data.animals.forEach(animal => {
                        const animalDiv = document.createElement('div');
                        animalDiv.className = 'col-lg-4';
                        const lastReport = animal.veterinary_reports.length > 0 ? animal.veterinary_reports[animal.veterinary_reports.length - 1] : null;
                        animalDiv.innerHTML = `
                            <div class="card m-4 cadre detail">
                                <div class="card-body">
                                    <h3 class="card-title">${animal.name}</h3>
                                    <img src="/uploads/images/${animal.image}" class="card-img-top" alt="${animal.name}" width="100">
                                    <h4>Rapport Vétérinaire</h4>
                                    ${lastReport ? `
                                        <div>
                                            <p><strong>État de santé:</strong> ${lastReport.health_status}</p>
                                            <p><strong>Nourriture:</strong> ${lastReport.food}</p>
                                            <p><strong>Poids de la nourriture:</strong> ${lastReport.food_weight} kg</p>
                                            <p><strong>Date du rapport:</strong> ${lastReport.report_date}</p>
                                            <p><strong>Détail:</strong> ${lastReport.detail}</p>
                                        </div>
                                    ` : '<p>Aucun rapport vétérinaire disponible.</p>'}
                                </div>
                            </div>
                        `;
                        animalsList.appendChild(animalDiv);
                    });
                    animalsList.scrollIntoView({behavior: 'smooth'});
                })
                .catch(error => {
                    console.error('Error fetching habitat details:', error.message);
                });
        });
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const existingFoodSelect = document.querySelector('select[name="veterinary_report[existing_food]"]');
    const newFoodInput = document.querySelector('input[name="veterinary_report[food]"]');

    if (!existingFoodSelect || !newFoodInput) {
        console.error('Existing food select or new food input not found.');
        return;
    }

    existingFoodSelect.addEventListener('change', function() {
        if (this.value) {
            newFoodInput.value = '';
            newFoodInput.setAttribute('disabled', 'disabled');
        } else {
            newFoodInput.removeAttribute('disabled');
        }
    });

    if (existingFoodSelect.value) {
        newFoodInput.setAttribute('disabled', 'disabled');
    }
});
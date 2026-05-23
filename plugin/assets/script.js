document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('dw-onboarding-form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const priorities = Array.from(
                document.querySelectorAll('input[name="priorities[]"]:checked')
            ).map(cb => cb.value);

            const data = {
                priorities: priorities,
                commitment: {
                    name: form.commitment_name.value,
                    type: form.commitment_type.value,
                    cost_monthly: parseFloat(form.cost_monthly.value) || 0,
                    time_weekly: parseFloat(form.time_weekly.value) || 0,
                    value_rating: parseInt(form.value_rating.value)
                }
            };

            console.log('Submitting:', data);
        });
    }
});
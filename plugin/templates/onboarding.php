<?php
if (!is_user_logged_in()) {
    wp_redirect(wp_login_url(get_permalink()));
    exit;
}

$current_user = wp_get_current_user();
?>

<div class="dw-onboarding">
    <h1>Welcome, <?php echo esc_html($current_user->display_name); ?></h1>
    <p>Let's figure out what's weighing you down.</p>

    <form id="dw-onboarding-form">
        <h2>Your priorities</h2>
        <p>What matters most to you right now? Select all that apply.</p>

        <div class="dw-priorities">
            <label><input type="checkbox" name="priorities[]" value="financial_freedom"> Financial freedom</label>
            <label><input type="checkbox" name="priorities[]" value="family_time"> Family time</label>
            <label><input type="checkbox" name="priorities[]" value="career_growth"> Career growth</label>
            <label><input type="checkbox" name="priorities[]" value="health"> Health</label>
            <label><input type="checkbox" name="priorities[]" value="creative_pursuits"> Creative pursuits</label>
            <label><input type="checkbox" name="priorities[]" value="social_life"> Social life</label>
        </div>

        <h2>Your first commitment</h2>
        <p>Add one thing that costs you money or time every month.</p>

        <div class="dw-commitment">
            <input type="text" name="commitment_name" placeholder="e.g. Netflix, weekly team lunch">
            
            <select name="commitment_type">
                <option value="money">Money</option>
                <option value="time">Time</option>
                <option value="both">Both</option>
            </select>

            <input type="number" name="cost_monthly" placeholder="Monthly cost ($)">
            <input type="number" name="time_weekly" placeholder="Hours per week">

            <label>How much value does this add to your life?</label>
            <input type="range" name="value_rating" min="1" max="10" value="5">
        </div>

        <button type="submit" id="dw-submit">Continue</button>
    </form>
</div>
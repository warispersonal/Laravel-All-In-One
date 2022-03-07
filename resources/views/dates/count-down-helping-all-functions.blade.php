<script>
    $(selector).countdown({
        labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
        // The expanded texts for the counters
        labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],
        // The display texts for the counters if only one
        compactLabels: ['y', 'm', 'w', 'd'], // The compact texts for the counters
        whichLabels: null, // Function to determine which labels to use
        digits: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], // The digits to display
        timeSeparator: ':', // Separator for time periods
        isRTL: false, // True for right-to-left languages, false for left-to-right

        until: null, // new Date(year, mth - 1, day, hr, min, sec) - date/time to count down to
        // or numeric for seconds offset, or string for unit offset(s):
        // 'Y' years, 'O' months, 'W' weeks, 'D' days, 'H' hours, 'M' minutes, 'S' seconds
        since: null, // new Date(year, mth - 1, day, hr, min, sec) - date/time to count up from
        // or numeric for seconds offset, or string for unit offset(s):
        // 'Y' years, 'O' months, 'W' weeks, 'D' days, 'H' hours, 'M' minutes, 'S' seconds
        timezone: null, // The timezone (hours or minutes from GMT) for the target times,
        // or null for client local
        serverSync: null, // A function to retrieve the current server time for synchronisation
        format: 'dHMS', // Format for display - upper case for always, lower case only if non-zero,
        // 'Y' years, 'O' months, 'W' weeks, 'D' days, 'H' hours, 'M' minutes, 'S' seconds
        layout: '', // Build your own layout for the countdown
        compact: false, // True to display in a compact format, false for an expanded one
        padZeroes: false, // True to add leading zeroes
        significant: 0, // The number of periods with values to show, zero for all
        description: '', // The description displayed for the countdown
        expiryText: '', // A message to display upon expiry, replacing the countdown digits
        expiryUrl: null, // A URL to load upon expiry, replacing the current page
        alwaysExpire: false, // True to trigger onExpiry even if never counted down
        onExpiry: null, // Callback when the countdown expires -
        // receives no parameters and 'this' is the containing division
        onTick: null, // Callback when the countdown is updated -
        // receives int[7] being the breakdown by period (based on format)
        // and 'this' is the containing division
        tickInterval: 1 // Interval (seconds) between onTick callbacks
    });

    $.countdown.regionalOptions[] // Language/country-specific localisations

    $.countdown.setDefaults(settings) // Set global defaults

    $.countdown.UTCDate(tz, time) // Standardise a date to UTC format
    $.countdown.UTCDate(tz, year, month, day, hours, mins, secs, ms)

    $.countdown.periodsToSeconds(periods) // Convert periods into equivalent seconds

    $.countdown.resync() // Re-synchronise all countdown instances with their server

    $(selector).countdown('option', options) // Change instance settings
    $(selector).countdown('option', name, value) // Change a single instance setting

    $(selector).countdown('option', name) // Retrieve instance settings

    $(selector).countdown('destroy') // Remove countdown functionality

    $(selector).countdown('pause') // Stop the countdown but don't clear it
    $(selector).countdown('lap') // Stop the display but continue the countdown
    $(selector).countdown('resume') // Restart a paused or lap countdown
    $(selector).countdown('toggle') // Toggle between pause/resume
    $(selector).countdown('toggleLap') // Toggle between lap/resume

    $(selector).countdown('getTimes') // Retrieve the current time periods
</script>

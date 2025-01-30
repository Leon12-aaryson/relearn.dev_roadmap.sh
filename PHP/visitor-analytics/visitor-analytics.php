<?php
/*
Plugin Name: Website analytics
Description: Counts website visits and tracks session duration for website helping to monitor the traffic on the website
Version: 1.0
Author: Aaron Leonard
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Function to set up a cookie for session tracking
function vc_set_session_cookie() {
    if (!isset($_COOKIE['vc_session_start'])) {
        setcookie('vc_session_start', time(), time() + 3600); // Cookie expires in 1 hour
    }
}

// Function to count visits and track session duration
function vc_count_visit() {
    $visits = get_option('vc_total_visits', 0);
    update_option('vc_total_visits', ++$visits);

    if (isset($_COOKIE['vc_session_start'])) {
        $session_start = $_COOKIE['vc_session_start'];
        $current_time = time();
        $session_duration = $current_time - $session_start;
        
        // Log session duration (very basic, for demonstration)
        $sessions = get_option('vc_sessions', []);
        $sessions[] = $session_duration;
        update_option('vc_sessions', $sessions);

        // Update the session start time
        setcookie('vc_session_start', time(), time() + 3600);
    } else {
        vc_set_session_cookie();
    }
}

// Hook into WordPress init to count visits and start session tracking
add_action('init', 'vc_count_visit');

// Function to display visit count and average session duration
function vc_display_stats() {
    $visits = get_option('vc_total_visits', 0);
    $sessions = get_option('vc_sessions', []);

    if (!empty($sessions)) {
        $average_duration = array_sum($sessions) / count($sessions);
        echo '<p>Total Visits: ' . $visits . '</p>';
        echo '<p>Average Session Duration: ' . round($average_duration / 60, 2) . ' minutes</p>';
    } else {
        echo '<p>Total Visits: ' . $visits . '</p>';
        echo '<p>No session data yet.</p>';
    }
}

// Shortcode to display statistics
function vc_stats_shortcode() {
    ob_start();
    vc_display_stats();
    return ob_get_clean();
}
add_shortcode('visitor_stats', 'vc_stats_shortcode');

// Add admin menu for stats
function vc_admin_menu() {
    add_menu_page('Visitor Stats', 'Visitor Stats', 'manage_options', 'vc_stats', 'vc_display_stats');
}
add_action('admin_menu', 'vc_admin_menu');
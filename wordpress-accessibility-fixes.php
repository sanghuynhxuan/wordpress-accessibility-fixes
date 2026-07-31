<?php
/**
 * Plugin Name: WordPress Accessibility Fixes
 * Description: Practical WordPress accessibility remediation patterns aligned with inclusive web delivery.
 * Version: 0.1.0
 * Author: Sang Huynh Xuan
 * License: GPL-2.0-or-later
 */

declare(strict_types=1);

namespace SangPortfolio;

if (! defined('ABSPATH')) {
    exit;
}

final class WordpressAccessibilityFixesPlugin {
    public function __construct() {
        add_action('init', [$this, 'bootstrap']);
    }

    public function bootstrap(): void {
        do_action('sang_portfolio_wordpress_accessibility_fixes_ready');
    }
}

new WordpressAccessibilityFixesPlugin();

<?php
namespace Affilicious\Common\Admin\Setup;

use Affilicious\Common\Admin\Notice\Download_Recommendation_Notice;

if (!defined('ABSPATH')) {
    exit('Not allowed to access pages directly.');
}

class Download_Recommendation_Setup
{
    /**
     * Enable the dismissed download recommendation.
     *
     * @since 0.9.16
     */
    public function init()
    {
        $disabled = carbon_get_theme_option('affilicious_options_affilicious_container_notices_tab_download_recommendations_disabled_field');
        if($disabled == 'yes') {
            return;
        }

        $dismissible_id = Download_Recommendation_Notice::DISMISSIBLE_ID;
        delete_option("aff_notice_{$dismissible_id}_dismissed");
    }
}
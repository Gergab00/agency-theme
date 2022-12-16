<?php
/**
 * Custom template tags for this theme
 *
 * @package UnderstrapChild
 * @author  Gerardo Gonzalez
 * @version 2022.09.08
 * @since   2022.09.08
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function formatPhoneNumber($number) 
{
    $number = preg_replace('/\D/', '', $number);
  
    if (strlen($number) == 10) {
        return '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6);
    } else {
        return $number;
    }
}

function get_social_icons()
{
    $social_links = explode(',',get_option( '_social_links', []));
    $social_icons = array(
        'facebook'=>'fa-facebook-f',
        'twitter'=>'fa-twitter',
        'linkedin'=>'fa-linkedin-in',
        'youtube'=>'fa-youtube',
        'behance'=>'fa-behance',
        'medium'=>'fa-medium',
        'github' => 'fa-github',
        'codepen' => 'fa-codepen',
        'instagram' => 'fa-instagram',
    );
    $output = '';

    foreach ( $social_links as $link ) {
        foreach ($social_icons as $key => $value) {
            if(str_contains($link, $key)){
                $html = '<span class="mx-14">';
                $html .= '<a class="" href="'.$link.'">';
                $html .= '<i class="fa-brands social-link text-white '. $value . '"></i>';
                $html .= '</a>';
                $html .= '</span>';

                $output .= $html;
            }
        }
    }

    echo $output;
    
}

function truncate_words($text, $limit) {
    $words = explode(' ', $text);
    if (count($words) > $limit) {
      return implode(' ', array_slice($words, 0, $limit)) . '...';
    }
    return $text;
}
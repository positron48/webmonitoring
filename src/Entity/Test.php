<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Test{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column() */
    protected $state;

    /** @ORM\Column(nullable=true) */
    protected $error;

    /** @ORM\Column(nullable=true) */
    protected $results_report_url;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_pagespeed_score;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_yslow_score;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_html_bytes;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_html_load_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_page_bytes;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_page_load_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_page_elements;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_redirect_duration;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_connect_duration;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_backend_duration;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_first_paint_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_first_contentful_paint_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_dom_interactive_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_dom_content_loaded_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_dom_content_loaded_duration;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_onload_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_onload_duration;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_fully_loaded_time;

    /** @ORM\Column(type="integer", nullable=true) */
    protected $results_rum_speed_index;
}
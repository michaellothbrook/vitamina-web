<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function optionsHistory()
  {
    return get_field('options_history');
  }

  public function optionsWhy()
  {
    return get_field('options_why');
  }

  public function optionsDifferents()
  {
    return get_field('options_differents');
  }

  public function optionsLatestNews()
  {
    return get_field('options_latest_news');
  }

  public function optionsContactBenefits()
  {
    return get_field('options_contact_benefits');
  }
}

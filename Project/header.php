<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prova</title>
    <?php wp_head(); ?>
  </head>
  <body>

    <!-- HOME HEADER -->
    <?php if( is_front_page() ): ?>
      <header>
      	<div class="overlay">
        <h1>Le Dolci Parole</h1>
        <h3>Pasticceria artigianale</h3>
        <p>Vieni a trovarci o prenota qualsiasi dolce
        e te lo prepareremo subito ! </p>
      </header>
    <?php endif; ?>

    <!-- MENU BUTTON -->
    <div class="menu">
      <input type="checkbox" id="active">
      <label for="active" class="menu-btn"><span></span></label>
      <label for="active" class="close"></label>
      <div class="wrapper">
              <?php wp_nav_menu(); ?>
      </div>
    </div>

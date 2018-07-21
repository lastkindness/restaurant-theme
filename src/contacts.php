<?php ob_start(); ?>

<main>
  <?php
  $title = 'Contacts';
  $title_content = "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind";
  $image_url = 'components/page-title/img/contacts.jpg';
  require 'components/page-title/page-title.php';
  ?>
  <div class="contacts_wrapper">
  	<div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="contacts_wrapper-contacts">
            <div class="ccontacts_wrapper-ontacts-info">
              <div class="contacts_wrapper-contacts-info-item">
                <h2>Phone</h2>
                <p>
                  +38 053 44 635 25</br>
                  +38 734 44 646 35
                </p>
              </div>
              <div class="contacts_wrapper-contacts-info-item">
                <h2>Location</h2>
                <p>1234 Street Ave,<br>Townsville, State, 01234</p>
              </div>
              <div class="contacts_wrapper-contacts-info-item">
                <h2>Hours</h2>
                <p>
                  Monday - Friday: 7am - 6pm</br>
                  Saturday: 8am - 8pm</br>
                  Sunday: 8am - 6pm
                </p>
              </div>
            </div>
            <div class="contacts_wrapper-contacts-icons">
              <?php require 'src/components/social/social.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contacts_wrapper-map">

    </div>
  </div>
</main>


<?php $GLOBALS['content'] = ob_get_clean(); ?>

<?php require 'components/layout-no_footer.php'; ?>

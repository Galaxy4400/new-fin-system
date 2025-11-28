<section class="faq" id="faq">
  <div class="faq__body container">
    <h2 class="faq__title"><?= t('t.index.faq_title') ?></h2>
    <div class="faq__spoiler" data-accordion>
      <div id="accordion-1" class="faq-accordion">
        <button class="faq-accordion__button h4" onclick="toggleAccordion(1)">
          <span class="faq-accordion__title"><?= t('t.index.faq_item_title_1') ?></span>
          <span class="faq-accordion__arrow"> <?php include 'components/icons/select-arrow.php' ?> </span>
        </button>
        <div id="content-1" class="faq-accordion__contaier">
          <div class="faq-accordion__content">
            <p><?= t('t.index.faq_item_text_1') ?></p>
          </div>
        </div>
      </div>
      <div id="accordion-2" class="faq-accordion">
        <button class="faq-accordion__button h4" onclick="toggleAccordion(2)">
          <span class="faq-accordion__title"><?= t('t.index.faq_item_title_2') ?></span>
          <span class="faq-accordion__arrow"> <?php include 'components/icons/select-arrow.php' ?> </span>
        </button>
        <div id="content-2" class="faq-accordion__contaier">
          <div class="faq-accordion__content">
            <p><?= t('t.index.faq_item_text_2') ?></p>
          </div>
        </div>
      </div>
      <div id="accordion-3" class="faq-accordion">
        <button class="faq-accordion__button h4" onclick="toggleAccordion(3)">
          <span class="faq-accordion__title"><?= t('t.index.faq_item_title_3') ?></span>
          <span class="faq-accordion__arrow"> <?php include 'components/icons/select-arrow.php' ?> </span>
        </button>
        <div id="content-3" class="faq-accordion__contaier">
          <div class="faq-accordion__content">
            <p><?= t('t.index.faq_item_text_3') ?></p>
          </div>
        </div>
      </div>
      <div id="accordion-4" class="faq-accordion">
        <button class="faq-accordion__button h4" onclick="toggleAccordion(4)">
          <span class="faq-accordion__title"><?= t('t.index.faq_item_title_4') ?></span>
          <span class="faq-accordion__arrow"> <?php include 'components/icons/select-arrow.php' ?> </span>
        </button>
        <div id="content-4" class="faq-accordion__contaier">
          <div class="faq-accordion__content">
            <p><?= t('t.index.faq_item_text_4') ?></p>
          </div>
        </div>
      </div>
      <div id="accordion-5" class="faq-accordion">
        <button class="faq-accordion__button h4" onclick="toggleAccordion(5)">
          <span class="faq-accordion__title"><?= t('t.index.faq_item_title_5') ?></span>
          <span class="faq-accordion__arrow"> <?php include 'components/icons/select-arrow.php' ?> </span>
        </button>
        <div id="content-5" class="faq-accordion__contaier">
          <div class="faq-accordion__content">
            <p><?= t('t.index.faq_item_text_5') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

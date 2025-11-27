<div class="py-8 md:py-20">
  <div class="container-base grid gap-5 md:gap-10">
    <h2 class="md:text-center"><?= t('t.index.faq_title') ?></h2>
    <div class="grid gap-2.5">
      <div
        id="accordion-1"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-all duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 p-5"
          onclick="toggleAccordion(1)"
        >
          <span class="h4 text-left transition-colors duration-300"><?= t('t.index.faq_item_title_1') ?></span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p><?= t('t.index.faq_item_text_1') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-2"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-all duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 p-5"
          onclick="toggleAccordion(2)"
        >
          <span class="h4 text-left transition-colors duration-300"><?= t('t.index.faq_item_title_2') ?></span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p><?= t('t.index.faq_item_text_2') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-3"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-all duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 p-5"
          onclick="toggleAccordion(3)"
        >
          <span class="h4 text-left transition-colors duration-300"><?= t('t.index.faq_item_title_3') ?></span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p><?= t('t.index.faq_item_text_3') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-4"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-all duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 p-5"
          onclick="toggleAccordion(4)"
        >
          <span class="h4 text-left transition-colors duration-300"><?= t('t.index.faq_item_title_4') ?></span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p><?= t('t.index.faq_item_text_4') ?></p>
          </div>
        </div>
      </div>
      <div
        id="accordion-5"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-all duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between gap-4 p-5"
          onclick="toggleAccordion(5)"
        >
          <span class="h4 text-left transition-colors duration-300"><?= t('t.index.faq_item_title_5') ?></span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p><?= t('t.index.faq_item_text_5') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleAccordion(index) {
    const currentAccordion = document.getElementById(`accordion-${index}`);
    const currentContent = document.getElementById(`content-${index}`);
    const isActive = currentAccordion.hasAttribute('data-active');

    const allAccordions = document.querySelectorAll('[id^="accordion-"]');
    const allContents = document.querySelectorAll('[id^="content-"]');

    allAccordions.forEach((acc) => acc.removeAttribute('data-active'));
    allContents.forEach((content) => (content.style.maxHeight = '0'));

    if (isActive) return;

    currentAccordion.setAttribute('data-active', '');
    currentContent.style.maxHeight = currentContent.scrollHeight + 'px';
  }
</script>

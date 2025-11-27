<div class="py-8 md:py-20">
  <div class="container-base grid gap-5 md:gap-10">
    <h2 class="md:text-center">Frequently Asked Questions</h2>
    <div class="grid gap-2.5">
      <!-- Accordion Item 1 -->
      <div
        id="accordion-1"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-colors duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between p-5"
          onclick="toggleAccordion(1)"
        >
          <span class="h4 transition-colors duration-300">What is Material Tailwind?</span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p>Material Tailwind is a framework that enhances Tailwind CSS with additional styles and components.</p>
          </div>
        </div>
      </div>
      <div
        id="accordion-2"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-colors duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between p-5"
          onclick="toggleAccordion(2)"
        >
          <span class="h4 transition-colors duration-300">What is Material Tailwind?</span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p>Material Tailwind is a framework that enhances Tailwind CSS with additional styles and components.</p>
          </div>
        </div>
      </div>
      <div
        id="accordion-3"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-colors duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between p-5"
          onclick="toggleAccordion(3)"
        >
          <span class="h4 transition-colors duration-300">What is Material Tailwind?</span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p>Material Tailwind is a framework that enhances Tailwind CSS with additional styles and components.</p>
          </div>
        </div>
      </div>
      <div
        id="accordion-4"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-colors duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between p-5"
          onclick="toggleAccordion(4)"
        >
          <span class="h4 transition-colors duration-300">What is Material Tailwind?</span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p>Material Tailwind is a framework that enhances Tailwind CSS with additional styles and components.</p>
          </div>
        </div>
      </div>
      <div
        id="accordion-5"
        class="group data-active:border-primary rounded-[10px] border border-gray-200 transition-colors duration-300 data-active:shadow-[6px_5px_18.1px_0_rgba(39,39,39,0.14)]"
      >
        <button
          class="group-data-active:text-primary hover:text-primary flex w-full cursor-pointer items-center justify-between p-5"
          onclick="toggleAccordion(5)"
        >
          <span class="h4 transition-colors duration-300">What is Material Tailwind?</span>
          <span class="transition-transform duration-300 group-data-active:rotate-180">
            <?php include 'components/icons/select-arrow.php' ?>
          </span>
        </button>
        <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300">
          <div class="px-5 pb-5 text-base">
            <p>Material Tailwind is a framework that enhances Tailwind CSS with additional styles and components.</p>
          </div>
        </div>
      </div>
      <!-- -------------- -->
    </div>
  </div>
</div>

<script>
  function toggleAccordion(index) {
    const accordion = document.getElementById(`accordion-${index}`);
    const content = document.getElementById(`content-${index}`);

    const isActive = accordion.hasAttribute('data-active');

    if (isActive) {
      console.log('isActive');
      accordion.removeAttribute('data-active');
      content.style.maxHeight = '0';
    } else {
      console.log('not isActive');
      accordion.setAttribute('data-active', '');
      content.style.maxHeight = content.scrollHeight + 'px';
    }
    // if (content.style.maxHeight && content.style.maxHeight !== '0px') {
    //   content.style.maxHeight = '0';
    // } else {
    //   content.style.maxHeight = content.scrollHeight + 'px';
    // }
  }
</script>

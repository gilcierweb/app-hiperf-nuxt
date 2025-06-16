import { useRouter } from "vue-router";

// FlyonUI
import "flyonui/flyonui";
import "flyonui/dist/accordion";
import "flyonui/dist/dropdown";

export default defineNuxtPlugin(() => {
  const router = useRouter();
  router.afterEach(async () => {
    setTimeout(() => window.HSAccordion.autoInit());
    setTimeout(() => window.HSDropdown.autoInit());
  });
});
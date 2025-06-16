import type { HSAccordion, HSDropdown, IStaticMethods } from "flyonui/flyonui";

declare global {
  interface Window {
    // Specific JS component
    // FlyonUI
    HSStaticMethods: IStaticMethods;
    HSAccordion: typeof HSAccordion;
    HSDropdown: typeof HSDropdown;
  }
}

export {};  
import type { HSAccordion, IStaticMethods } from "flyonui/flyonui";

declare global {
  interface Window {
    // Specific JS component
    // FlyonUI
    HSStaticMethods: IStaticMethods;
    HSAccordion: typeof HSAccordion;
  }
}

export {};  
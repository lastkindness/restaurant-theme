import './style.scss';

 import Trigger from './generals/trigger';

 import LanguageSwitch from './components/language-switch/language-switch';

document.addEventListener('DOMContentLoaded', () => {
     new Trigger();
     new LanguageSwitch();
});
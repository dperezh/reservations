import { Component } from '@angular/core';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'reservations-frontend';
  language: string;

  constructor(
    public translate: TranslateService
  ) {
    translate.addLangs(['en', 'es']);
    translate.setDefaultLang('en');
  }

  switchLang(lang: string): void {
    this.translate.use(lang);
  }
}

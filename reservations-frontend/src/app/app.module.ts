import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

// Components
import { AppComponent } from './app.component';
import { NavigationBarComponent } from './components/navigation-bar/navigation-bar.component';
import { ReservationListComponent } from './views/reservation-list/reservation-list.component';
import { ReservationCreateComponent } from './views/reservation-create/reservation-create.component';
import { ContactListComponent } from './views/contact-list/contact-list.component';
import { ContactCreateComponent } from './views/contact-create/contact-create.component';
import { TranslateHttpLoader } from '@ngx-translate/http-loader';

// Modules
import { AppRoutingModule } from './app-routing.module';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatGridListModule } from '@angular/material/grid-list';
import { MatTableModule } from '@angular/material/table';
import { MatPaginatorModule } from '@angular/material/paginator';
import { HttpClientModule, HttpClient } from '@angular/common/http';
import { TableModule } from 'primeng/table';
import { RatingModule } from 'primeng/rating';
import { FormsModule } from '@angular/forms';
import { InputTextModule } from 'primeng/inputtext';
import { DropdownModule } from 'primeng/dropdown';
import { CalendarModule } from 'primeng/calendar';
import { InputMaskModule } from 'primeng/inputmask';
import { CardModule } from 'primeng/card';
import { EditorModule } from 'primeng/editor';
import { AutoCompleteModule } from 'primeng/autocomplete';
import { MessagesModule } from 'primeng/messages';
import { MessageModule } from 'primeng/message';
import { MessageService } from 'primeng/api';
import { TranslateLoader, TranslateModule } from '@ngx-translate/core';
import { MatSelectModule } from '@angular/material/select';

@NgModule({
  declarations: [
    AppComponent,
    NavigationBarComponent,
    ReservationListComponent,
    ReservationCreateComponent,
    ContactListComponent,
    ContactCreateComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatButtonModule,
    MatIconModule,
    MatGridListModule,
    MatTableModule,
    MatPaginatorModule,
    HttpClientModule,
    TableModule,
    RatingModule,
    FormsModule,
    InputTextModule,
    DropdownModule,
    CalendarModule,
    InputMaskModule,
    CardModule,
    EditorModule,
    AutoCompleteModule,
    MessageModule,
    MessagesModule,
    MatSelectModule,
    TranslateModule.forRoot({
      loader: {
        provide: TranslateLoader,
        useFactory: httpTranslateLoader,
        deps: [HttpClient]
      }
    })
  ],
  providers: [MessageService],
  bootstrap: [AppComponent]
})
export class AppModule { }

export function httpTranslateLoader(http: HttpClient) {
  return new TranslateHttpLoader(http);
}

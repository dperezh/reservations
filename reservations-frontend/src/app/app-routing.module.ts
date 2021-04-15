import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ReservationCreateComponent } from './views/reservation-create/reservation-create.component';
import { ReservationListComponent } from './views/reservation-list/reservation-list.component';
import { ContactListComponent } from './views/contact-list/contact-list.component';
import { ContactCreateComponent } from './views/contact-create/contact-create.component';


const routes: Routes = [
  { path: 'reservations', component: ReservationListComponent },
  { path: 'create-reservation', component: ReservationCreateComponent },
  { path: 'contacts', component: ContactListComponent },
  { path: 'create-contact', component: ContactCreateComponent },
  { path: '**', redirectTo: '/reservations'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

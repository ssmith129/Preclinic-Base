import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-patient-invoice-details',
  templateUrl: './patient-invoice-details.component.html',
  styleUrls: ['./patient-invoice-details.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class PatientInvoiceDetailsComponent {
routes=routes
}

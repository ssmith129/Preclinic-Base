import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-patient-prescription-details',
  templateUrl: './patient-prescription-details.component.html',
  styleUrls: ['./patient-prescription-details.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class PatientPrescriptionDetailsComponent {
routes=routes
}

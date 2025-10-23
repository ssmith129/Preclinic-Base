import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-doctor-patient-details',
  templateUrl: './doctor-patient-details.component.html',
  styleUrls: ['./doctor-patient-details.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class DoctorPatientDetailsComponent {
routes=routes
}

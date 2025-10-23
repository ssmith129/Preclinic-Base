import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-patients-doctor-details',
  templateUrl: './patients-doctor-details.component.html',
  styleUrls: ['./patients-doctor-details.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class PatientsDoctorDetailsComponent {
routes=routes
}

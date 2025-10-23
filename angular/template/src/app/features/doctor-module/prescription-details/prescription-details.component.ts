import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-prescription-details',
  templateUrl: './prescription-details.component.html',
  styleUrls: ['./prescription-details.component.scss'],
  imports:[CommonModule,RouterLink]
})
export class PrescriptionDetailsComponent {
routes=routes
}

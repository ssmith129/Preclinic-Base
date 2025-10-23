import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { MatSelectModule } from '@angular/material/select';

@Component({
  selector: 'app-leave-type',
  templateUrl: './leave-type.component.html',
  styleUrls: ['./leave-type.component.scss'],
  imports:[CommonModule,MatSelectModule]
})
export class LeaveTypeComponent {
  routes=routes

}

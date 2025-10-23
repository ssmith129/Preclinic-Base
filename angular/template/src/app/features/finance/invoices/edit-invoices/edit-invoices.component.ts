import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { MatSelectModule } from '@angular/material/select';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';

@Component({
  selector: 'app-edit-invoices',
  templateUrl: './edit-invoices.component.html',
  styleUrls: ['./edit-invoices.component.scss'],
  imports:[CommonModule,RouterLink,MatSelectModule,BsDatepickerModule]
})
export class EditInvoicesComponent {
routes=routes
}

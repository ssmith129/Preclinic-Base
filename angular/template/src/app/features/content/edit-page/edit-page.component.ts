import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { MatSelectModule } from '@angular/material/select';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';
import { MatSortModule } from '@angular/material/sort';
import { FormsModule } from '@angular/forms';
import { MultiSelectModule } from 'primeng/multiselect';
import { TagInputModule } from 'ngx-chips';
import { routes } from '../../../shared/routes/routes';

@Component({
  selector: 'app-edit-page',
  templateUrl: './edit-page.component.html',
  styleUrls: ['./edit-page.component.scss'],
  imports:[CommonModule,RouterLink,MatSelectModule]
})
export class EditPageComponent {
routes=routes
}

import { Component } from '@angular/core';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { MatSelectModule } from '@angular/material/select';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';
import { CustomPaginationComponent } from '../../../shared/custom-pagination/custom-pagination.component';
import { MatSortModule } from '@angular/material/sort';
import { FilterComponent } from '../../../common-component/filter/filter.component';
import { FormsModule } from '@angular/forms';
import { MultiSelectModule } from 'primeng/multiselect';

@Component({
  selector: 'app-payroll-2',
  templateUrl: './payroll-2.component.html',
  styleUrls: ['./payroll-2.component.scss'],
  imports: [CommonModule,RouterLink,MatSelectModule,BsDatepickerModule,MatSortModule,FormsModule,MultiSelectModule]
})
export class Payroll2Component {
routes=routes
}

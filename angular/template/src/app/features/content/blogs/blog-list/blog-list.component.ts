import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { MatSelectModule } from '@angular/material/select';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';
import { MatSortModule } from '@angular/material/sort';
import { FormsModule } from '@angular/forms';
import { MultiSelectModule } from 'primeng/multiselect';
import { TagInputModule } from 'ngx-chips';
import { NgxEditorModule } from 'ngx-editor';

@Component({
  selector: 'app-blog-list',
  templateUrl: './blog-list.component.html',
  styleUrls: ['./blog-list.component.scss'],
  imports:[CommonModule,RouterLink,MatSelectModule,BsDatepickerModule,MatSortModule,FormsModule,MultiSelectModule,TagInputModule,NgxEditorModule]
})
export class BlogListComponent {
routes=routes
}

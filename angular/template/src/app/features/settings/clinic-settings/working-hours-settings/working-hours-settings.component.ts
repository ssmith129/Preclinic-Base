import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { DatePickerModule } from 'primeng/datepicker';

@Component({
  selector: 'app-working-hours-settings',
  templateUrl: './working-hours-settings.component.html',
  styleUrls: ['./working-hours-settings.component.scss'],
  imports:[CommonModule,DatePickerModule,FormsModule]
})
export class WorkingHoursSettingsComponent {
selectedDate:Date[]=[];
}

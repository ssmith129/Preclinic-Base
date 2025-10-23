import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { DateRangePickerComponent } from '../../../common-component/date-range-picker/date-range-picker.component';

@Component({
  selector: 'app-attendance',
  templateUrl: './attendance.component.html',
  styleUrls: ['./attendance.component.scss'],
  imports:[CommonModule,DateRangePickerComponent]
})
export class AttendanceComponent {

}

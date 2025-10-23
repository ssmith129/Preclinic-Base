import {  Component, ViewEncapsulation } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { MatSelectModule } from '@angular/material/select';
import { RouterLink } from '@angular/router';
import { DatePickerModule } from 'primeng/datepicker';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { FilterComponent } from '../../../../common-component/filter/filter.component';
import { DateRangePickerComponent } from '../../../../common-component/date-range-picker/date-range-picker.component';
import { CustomCalendarComponent } from '../../../../common-component/custom-calendar/custom-calendar.component';

@Component({
  selector: 'app-patient-appointment-details',
  templateUrl: './patient-appointment-details.component.html',
  styleUrls: ['./patient-appointment-details.component.scss'],
  encapsulation: ViewEncapsulation.None,
  imports:[CommonModule,MatSelectModule,RouterLink,DatePickerModule,FormsModule,FilterComponent,DateRangePickerComponent,CustomCalendarComponent]
})
export class PatientAppointmentDetailsComponent {
routes=routes
showEventDetailsModal = false;
  eventDetails = { title: '' };
  date: Date[] | undefined;
  dropdownOpen = false;
  selectedTime: Date = new Date();
  addtime2: Date | undefined;
  addtime: Date | undefined;
  time: Date[] | undefined; 
  time2: Date[] | undefined; 
  bsInlineValue = new Date()


  ngOnInit(): void {}
    // Open the dropdown
    openDropdown() {
      this.dropdownOpen = true;
    }

    // Close the dropdown
    closeDropdown() {
      this.dropdownOpen = false;
    }

    // Update displayed time when selection changes
    onTimeChange() {
      this.closeDropdown(); // Close dropdown after time selection
    }

  handleEventDetailsClose() {
    this.showEventDetailsModal = false;
  }
}

import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { MatSelectModule } from '@angular/material/select';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';
import { DatePickerModule } from 'primeng/datepicker';

@Component({
  selector: 'app-schedules',
  templateUrl: './schedules.component.html',
  styleUrls: ['./schedules.component.scss'],
  imports:[CommonModule,DatePickerModule,FormsModule,MatSelectModule,BsDatepickerModule]
})
export class SchedulesComponent {
  addtime: Date | undefined;
  addtime2: Date | undefined;
  selectedDates: Date[] = [];
formData: any[][] = [];

addNewRow(index: number) {
  // Ensure the sub-array exists
  if (!this.formData[index]) {
    this.formData[index] = [];
  }

  this.formData[index].push({ index });
}

removeRow(groupIndex: number, itemIndex: number) {
  if (this.formData[groupIndex]) {
    this.formData[groupIndex].splice(itemIndex, 1);
  }
}

trackByIndex(index: number, item: any) {
  return index;
}
}

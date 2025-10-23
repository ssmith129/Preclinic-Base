import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { MatSelectModule } from '@angular/material/select';

@Component({
  selector: 'app-custom-fields-settings',
  templateUrl: './custom-fields-settings.component.html',
  styleUrls: ['./custom-fields-settings.component.scss'],
  imports:[CommonModule,MatSelectModule]
})
export class CustomFieldsSettingsComponent {

}

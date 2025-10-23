import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatSelectModule } from '@angular/material/select';

@Component({
  selector: 'app-localization-settings',
  templateUrl: './localization-settings.component.html',
  styleUrls: ['./localization-settings.component.scss'],
  imports: [CommonModule,MatSelectModule]
})
export class LocalizationSettingsComponent {

}

import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatSelectModule } from '@angular/material/select';

@Component({
  selector: 'app-gdpr-cookies-settings',
  templateUrl: './gdpr-cookies-settings.component.html',
  styleUrls: ['./gdpr-cookies-settings.component.scss'],
  imports: [CommonModule,MatSelectModule]
})
export class GdprCookiesSettingsComponent {

}

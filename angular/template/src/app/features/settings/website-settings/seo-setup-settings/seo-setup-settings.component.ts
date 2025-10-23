import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TagInputModule } from 'ngx-chips';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-seo-setup-settings',
  templateUrl: './seo-setup-settings.component.html',
  styleUrls: ['./seo-setup-settings.component.scss'],
  imports: [CommonModule,TagInputModule,FormsModule]
})
export class SeoSetupSettingsComponent {
  tags=['Admin', 'Clinic', 'Management']
}

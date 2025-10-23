import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { TagInputModule } from 'ngx-chips';

@Component({
  selector: 'app-cronjob-settings',
  templateUrl: './cronjob-settings.component.html',
  styleUrls: ['./cronjob-settings.component.scss'],
  imports:[CommonModule,FormsModule,TagInputModule]
})
export class CronjobSettingsComponent {
tags=['1 Day', '1 Hour'];
}

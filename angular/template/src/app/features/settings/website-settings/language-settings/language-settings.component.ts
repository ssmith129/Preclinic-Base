import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-language-settings',
  templateUrl: './language-settings.component.html',
  styleUrls: ['./language-settings.component.scss'],
  imports: [CommonModule,RouterLink]
})
export class LanguageSettingsComponent {
routes=routes
isActive:boolean[]=[false];
toggleActive(index:number):void{
  this.isActive[index]=!this.isActive[index]
}
}

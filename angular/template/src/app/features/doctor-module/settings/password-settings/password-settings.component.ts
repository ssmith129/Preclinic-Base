import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { routes } from '../../../../../../src/app/shared/routes/routes';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-password-settings',
  templateUrl: './password-settings.component.html',
  styleUrl: './password-settings.component.scss',
  imports:[CommonModule,RouterLink]
})
export class PasswordSettingsComponent {
routes=routes
password:boolean[]=[false];
togglePassword(index:number):void{
  this.password[index]=!this.password[index]
}
}

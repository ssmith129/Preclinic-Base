import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-reset-password',
  imports: [CommonModule, RouterLink,FormsModule],
  templateUrl: './reset-password.component.html',
  styleUrl: './reset-password.component.scss'
})
export class ResetPasswordComponent {
  public routes = routes;
  passwordClass:boolean[] = [false];
  togglePassword(index:number):void{
    this.passwordClass[index] = !this.passwordClass[index];
  }
  constructor(private router:Router){
    
  }
  pageRedirect(){
    this.router.navigate([routes.successBasic])
  }
}

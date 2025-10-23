import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-register',
  imports: [CommonModule, RouterLink,FormsModule],
  templateUrl: './register.component.html',
  styleUrl: './register.component.scss'
})
export class RegisterComponent {
  public routes = routes;
  passwordClass:boolean[] = [false];
  togglePassword(index:number):void{
    this.passwordClass[index] = !this.passwordClass[index];
  }
  constructor(private router:Router){
    
  }
  pageRedirect(){
    this.router.navigate([routes.loginBasic])
  }
}

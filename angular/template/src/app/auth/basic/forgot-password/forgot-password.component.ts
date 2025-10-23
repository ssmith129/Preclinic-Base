import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-forgot-password',
  imports: [CommonModule, RouterLink,FormsModule],
  templateUrl: './forgot-password.component.html',
  styleUrl: './forgot-password.component.scss'
})
export class ForgotPasswordComponent {
  routes=routes
  constructor(private router:Router){}
  pageRedirect(){
    this.router.navigate([routes.emailVerificationBasic])
  }
}

import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-email-verification',
  imports: [CommonModule,FormsModule],  
  templateUrl: './email-verification.component.html',
  styleUrl: './email-verification.component.scss'
})
export class EmailVerificationComponent {
  routes=routes
  constructor(private router:Router){}
  pageRedirect(){
    this.router.navigate([routes.twoStepVerificationBasic])
  }
}

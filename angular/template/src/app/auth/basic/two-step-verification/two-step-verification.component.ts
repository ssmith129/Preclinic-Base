import { Component, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { NgOtpInputComponent, NgOtpInputModule   } from 'ng-otp-input';
import { routes } from '../../../../../src/app/shared/routes/routes';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-two-step-verification',
  imports: [CommonModule,NgOtpInputModule,FormsModule],
  templateUrl: './two-step-verification.component.html',
  styleUrl: './two-step-verification.component.scss'
})
export class TwoStepVerificationComponent {
 routes=routes
 value : any
@ViewChild('otpRef', { static: false }) otpInput?: NgOtpInputComponent;

  handleOtpChange(value: string) {
    console.log('OTP Changed:', value);
  }
  resetOtp() {
    this.otpInput?.setValue('');
  }
  constructor(private router:Router){}
  pageRedirect(){
    this.router.navigate([routes.resetPasswordBasic])
  }
}

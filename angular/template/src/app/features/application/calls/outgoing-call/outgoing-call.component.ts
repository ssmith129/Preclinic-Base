import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { routes } from '../../../../shared/routes/routes';

@Component({
  selector: 'app-outgoing-call',
  templateUrl: './outgoing-call.component.html',
  styleUrls: ['./outgoing-call.component.scss'],
  imports: [CommonModule,RouterLink]
})
export class OutgoingCallComponent {
routes=routes
}

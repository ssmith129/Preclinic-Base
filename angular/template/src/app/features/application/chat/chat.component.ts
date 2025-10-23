  import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { routes } from '../../../shared/routes/routes';

@Component({
    selector: 'app-chat',
    templateUrl: './chat.component.html',
    styleUrls: ['./chat.component.scss'],
    imports: [CommonModule,RouterLink]
})
export class ChatComponent {
  routes=routes
  public chatSearch = false;
  public emoji = false;
  showChatSearch(){
    this.chatSearch = !this.chatSearch;
  }
  toggleemoji(){
    this.emoji=!this.emoji
  }
}

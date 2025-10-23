import { CommonModule } from '@angular/common';
import { Component, Renderer2 } from '@angular/core';
import { RouterLink } from '@angular/router';
import { routes } from '../../../../shared/routes/routes';
import { DateRangePickerComponent } from '../../../../common-component/date-range-picker/date-range-picker.component';


@Component({
  selector: 'app-call-history',
  templateUrl: './call-history.component.html',
  styleUrls: ['./call-history.component.scss'],
  imports: [CommonModule,RouterLink,DateRangePickerComponent]
})
export class CallHistoryComponent {
routes=routes
constructor(private renderer:Renderer2){

}
ngOnInit(){
  this.renderer.addClass(document.body, 'custom-daterangepicker');
}
ngOnDestroy(){
  this.renderer.removeClass(document.body, 'custom-daterangepicker');
}
}

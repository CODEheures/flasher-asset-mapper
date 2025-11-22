import { Controller } from '@hotwired/stimulus';
import flasher from '@flasher/flasher';

export default class extends Controller {
    connect() {
        window.addEventListener('younes:flash',
                                (response) =>
                                {
                                    flasher.render(response.detail)
                                })
    }
}

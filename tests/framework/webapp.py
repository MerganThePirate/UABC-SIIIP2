from urllib.parse import urljoin

from data.config import settings
from selenium import webdriver


class WebApp:
    instance = None

    @classmethod
    def get_instance(cls):
        if cls.instance is None:
            cls.instance = WebApp()
        return cls.instance

    def __init__(self):
       self.driver = webdriver.Chrome()

    def get_driver(self):
        return self.driver

    def load_website(self):
        self.driver.get(settings['url'])

    def goto_page(self, page):
        url = urljoin(settings['url'], page.lower())
        self.driver.get(url)

    def verify_component_exists(self, component):
        self.driver.find_element_by_id(component)


webapp = WebApp.get_instance()

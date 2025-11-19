import { reactive, ref } from "vue";

export function usePing() {
  const BASE_URL = import.meta.env.VITE_BACKEND_URL;

  const form = reactive({
    uuid: "",
    battery_percent: "",
  });

  const flashMessage = ref<string | undefined>(undefined);

  const errors = reactive<{ uuid?: string[]; battery_percent?: string[] }>({});

  const resetErrors = () => {
    Object.keys(errors).forEach(
      (key) => delete errors[key as keyof typeof errors]
    );
  };

  const resetForm = () => {
    form.uuid = "";
    form.battery_percent = "";
  };

  const onSubmit = async (e: Event) => {
    e.preventDefault();

    resetErrors();

    try {
      const headers = {
        Accept: "application/json",
        "Content-Type": "application/json",
      };

      const response = await fetch(`${BASE_URL}/api/ping`, {
        method: "POST",
        headers,
        body: JSON.stringify(form),
      });

      const data = await response.json();

      if (data.error) {
        // error
        Object.assign(errors, data.errors);
      } else {
        // success
        flashMessage.value = "Ping submitted successfully!";

        resetForm();
      }
    } catch (err: any) {
      console.error(err);
    }
  };

  return {
    onSubmit,
    form,
    errors,
    flashMessage,
  };
}
